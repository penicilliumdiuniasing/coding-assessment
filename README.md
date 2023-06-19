# Boss Boleh's coding-assessment

## Follow this steps

#### Application Setup (DO THIS FIRST)

- **Fork this repository** into your **GitHub** account (You can create a **GitHub** account if you don't have one)
- Clone the repository from **your repository**

#### First Test - CRUD REST API

- Make sure that you are in `master` branch
- Create a new branch and name it `feature/crud-api`
- Create a model with name `Event`
- `Event` will have these properties
  - **id** -> PK, UNIQUE, value must be a UUID
  - **name** -> String
  - **slug** -> UNIQUE, String
  - **createdAt** -> NOT NULL, DateTime
  - **updatedAt** -> NOT NULL, DateTime
- Create these APIs
  - GET /api/v1/events -> Return all events from the database
  - GET /api/v1/events/active-events -> Return all events that are Sactive = current datetime is within startAt and endAt
  - GET /api/v1/events/{id} -> Get one event
  - POST /api/v1/events -> Create an event
  - PUT /api/v1/events/{id} -> Create event if not exist, else update the event in idempotent way
  - PATCH /api/v1/events/{id} -> Partially update event
  - DELETE /api/v1/events/{id} -> Soft delete an event
- Seed the database with dummy events (min. 5 events)
- Merge `feature/crud-api` with `master`, use PR

#### Second Test - UI

- Make sure that you are in `master` branch
- Create a new branch and name it `feature/ui`
- Create these views
  - /events -> Show all events in the table (search and pagination has bonus point). Last column should display 2 buttons on each row to update and delete the event
  - /events/{id} -> Show individual event
  - /events/create -> Create an event
  - /events/{id}/edit -> Edit an event
- Merge `feature/ui` with `master`, use PR

#### Third Test - Advance Topic

- Make sure that you are in `master` branch
- Create a new branch and name it `feature/advance-topic`
- Implement these features
  - Server side data caching with redis
  - Send an email everytime an event is created (you can use mailtrap or other smtp provider that's easy to setup)
  - Authentication -> only authenticated users can create, update and delete events
  - Calling of an external API(s) and display the data in the UI (can be any public external API(s))

## Bonus points

- If you follow a clean code principle
- If you follow a good git practice
- If you deploy the application on the internet

## Finally

- Push all the codes into your remote repository
- Make sure the repository is public
