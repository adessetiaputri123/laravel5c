# Anti-Procrastination App - Database ERD

## Tables

The Anti-Procrastination App database consists of:

1. users
2. categories
3. tasks
4. subtasks
5. task_delays
6. rescue_plans
7. focus_sessions
8. notifications
9. user_statistics

## Entity Relationships

```mermaid
erDiagram
    USERS ||--o{ CATEGORIES : has
    USERS ||--o{ TASKS : creates
    USERS ||--o{ FOCUS_SESSIONS : has
    USERS ||--o{ NOTIFICATIONS : receives
    USERS ||--o{ USER_STATISTICS : has

    CATEGORIES ||--o{ TASKS : contains

    TASKS ||--o{ SUBTASKS : has
    TASKS ||--o{ TASK_DELAYS : has
    TASKS ||--o{ RESCUE_PLANS : has
    TASKS ||--o{ FOCUS_SESSIONS : has
    TASKS ||--o{ NOTIFICATIONS : has
```

## Relationship Description

### User - Category

One user can have many categories.

### User - Task

One user can have many tasks.

### Category - Task

One category can contain many tasks.

### Task - Subtask

One task can have many subtasks.

### Task - Task Delay

One task can have multiple delay histories.

### Task - Rescue Plan

One task can have multiple rescue plans.

### Task - Focus Session

One task can have multiple focus sessions.

### User - Focus Session

One user can have multiple focus sessions.

### Task - Notification

One task can generate multiple notifications.

### User - Notification

One user can receive multiple notifications.

### User - User Statistic

One user can have multiple daily statistic records.
