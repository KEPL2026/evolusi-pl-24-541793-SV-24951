# Panduan Kontribusi

## Alur kerja branch

1. Mulai dari `dev` dan buat branch `feature/<nama-perubahan>`.
2. Gunakan pesan commit Conventional Commits seperti `feat:`, `fix:`, `test:`, `docs:`, atau `ci:`.
3. Buka Pull Request dari feature ke `dev`.
4. Setelah pemeriksaan CI berhasil, buka Pull Request dari `dev` ke `main`.

Branch `main` dan `dev` dilindungi. Perubahan harus melewati Pull Request dan pemeriksaan CI.
