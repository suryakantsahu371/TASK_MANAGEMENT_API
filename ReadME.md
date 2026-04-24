# 🚀 Mini Project Management System API + Admin Panel

A robust **Project & Task Management System** built with Laravel, featuring secure authentication, role-based authorization, and RESTful APIs for managing projects and tasks efficiently.

---

## 📌 Features

### 🔐 Authentication
- User Registration & Login
- Token-based authentication using **Laravel Sanctum**

---

## 👥 Entities

### Users
- id
- name
- email
- password

### Projects
- id
- title
- description
- created_by

### Tasks
- id
- project_id
- title
- description
- status (`pending`, `in-progress`, `completed`)
- assigned_to
- due_date

---

## 🔗 Relationships
- A **User** has many **Projects**
- A **Project** has many **Tasks**
- A **Task** belongs to a **User (assignee)**

---

## ⚙️ Functionalities

### 📁 Project Management
- Create Project
- Update Project *(only by creator)*
- Delete Project *(only by creator)*

### ✅ Task Management
- Create tasks within projects
- Assign tasks to users
- Update task status
- Only **assigned user or project owner** can update tasks

### 🔍 Filters
- Get tasks by:
  - Status
  - Assigned user
  - Due date

---

## 🔒 Authorization Rules
- Only **project owner** can manage projects
- Only **assigned user or owner** can update tasks

---

## 🌐 API Standards
- RESTful API structure
- JSON responses
- Proper HTTP status codes:
  - `200 OK`
  - `201 Created`
  - `403 Forbidden`
  - `404 Not Found`

---

