#!/bin/bash

# --- Konfigurasi ---
# Tentukan path ke file database SQLite Anda.
DB_PATH="database/database.sqlite"

# Tentukan path ke folder tempat data seeder akan disimpan.
SEEDER_DIR="database/seeders/data"

# Pastikan Anda sudah menginstal 'sqlite3'.
if ! command -v sqlite3 &> /dev/null
then
    echo "Error: sqlite3 tidak terinstal. Silakan instal dengan 'sudo apt-get install sqlite3'."
    exit 1
fi

# Buat folder seeder jika belum ada.
mkdir -p "$SEEDER_DIR"
mkdir -p "$SEEDER_DIR/latest_backup"

# Dapatkan timestamp untuk nama folder.
TIMESTAMP=$(date +"%Y_%m_%d_%H%M%S")
OUTPUT_DIR="$SEEDER_DIR/$TIMESTAMP"
mkdir -p "$OUTPUT_DIR"

# --- Proses Backup ---
echo "Memulai proses backup data dari '$DB_PATH'..."
echo "Data akan diekspor ke format JSON di '$OUTPUT_DIR'."

# Dapatkan daftar semua tabel, kecuali tabel migrasi bawaan Laravel
# dan tabel internal SQLite.
TABLES=$(sqlite3 "$DB_PATH" "SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%' AND name != 'migrations';")

if [ -z "$TABLES" ]; then
    echo "Tidak ada tabel yang ditemukan untuk dibackup."
    exit 1
fi

# Iterasi setiap tabel dan ekspor data ke file JSON.
for TABLE_NAME in $TABLES
do
    echo "  -> Mengekspor tabel '$TABLE_NAME'..."
    sqlite3 -json "$DB_PATH" "SELECT * FROM '$TABLE_NAME';" > "$OUTPUT_DIR/$TABLE_NAME.json"
    if [ $? -ne 0 ]; then
        echo "Error: Gagal mengekspor data dari tabel '$TABLE_NAME'."
        rm -rf "$OUTPUT_DIR" # Hapus folder yang gagal
        exit 1
    fi
done

cp -a "$OUTPUT_DIR/." "$SEEDER_DIR/latest_backup/"
zip -r "$OUTPUT_DIR.zip" "$OUTPUT_DIR"
rm -rf "$OUTPUT_DIR"

echo "Backup berhasil! Data seeder dalam format JSON siap digunakan."
echo ""
echo ""

exit 0
