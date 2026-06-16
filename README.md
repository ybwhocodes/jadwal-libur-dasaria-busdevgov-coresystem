# Dasaria Holiday Schedule — BusDevGov Core System

Web-based attendance and leave management system for Dasaria's **Informatics Technology** and **Business Development** directorates. Built with vanilla JavaScript, Tailwind CSS, and Supabase.

## Pages

### `index.html` — Attendance Dashboard
Excel-like monthly grid showing daily attendance statuses (**L**eave, **S**ick, E**x**cused, **A**bsent) for every employee. Features directorate tabs (IT / BD) with Lead employees appearing in both views. Supports month/year navigation and CSV export.

### `directorat.html` — Directorate Members
Simple tab-based directory listing employees by directorate with name, division, and row-level styling.

### `admin.html` — Admin Panel
Password-protected panel for managing schedules. Three tabs:

| Tab | Description |
|---|---|
| **Tambah Jadwal Libur** | Bulk-add leave schedules with multi-employee + multi-date selection, status picker (L/I/S), optional notes, duplicate validation, and summary preview. |
| **Tukar Libur** | Swap leave dates between two employees or move a single employee's leave to a new date. |
| **List Perizinan** | View all excused (`I`) and sick (`S`) records per month with employee name, date, and reason. |

Login credentials: `dasar_ria` / `baikbaik`

## Tech Stack

| Technology | Usage |
|---|---|
| HTML5 + Vanilla JS | No framework |
| Tailwind CSS | CDN |
| Supabase JS v2 | Backend (database & API) |
| Google Fonts (Inter) | Typography |

## Database

Two tables on Supabase:

- **`employees`** — `id`, `name`, `division`, `directorat` (IT / BD / Lead), `number`, `row_class`
- **`attendance`** — `employee_id`, `attendance_date`, `status` (L / I / S), `information`

## Run

Open any `.html` file directly in a browser, or serve locally:

```bash
python3 -m http.server 8080
```
