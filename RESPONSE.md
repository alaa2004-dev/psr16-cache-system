# Week 3 Task - Routing, REST API & Docker

## Questions & Answers

### 1. Is there a specific tool used to create API with Laravel? Like API-Platform or Swagger?
No, Laravel does not require an external tool or framework like API-Platform to build APIs. It has built-in support for RESTful APIs out of the box using **API Routes (`routes/api.php`)**, **Eloquent ORM**, and **API Resources (JsonResource)** for transforming data. 

However, tools like **Swagger / OpenApi (via `l5-swagger`)** or **Postman** are commonly used alongside Laravel for API documentation and testing, but not for building the API itself.



### 2. What is the role or purpose of using Docker?
The primary purpose of Docker is to containerize applications by packaging the code, runtime, system tools, libraries, and settings into isolated environments called **Containers**. 

This ensures consistency across development, testing, and production environments, solving the classic *"It works on my machine"* problem. It simplifies dependency management and makes applications lightweight and portable.



### 3. What is Docker Compose?
**Docker Compose** is a tool used for defining and running multi-container Docker applications. 

Instead of starting each container separately (e.g., Laravel app, MySQL database, Nginx), Docker Compose allows developers to configure all application services in a single `docker-compose.yml` file and start the entire stack using a single command:

`docker compose up -d`



### 4. Can you explain the meaning of Resource under Routing Facade?
In Laravel's Routing Facade, `Route::resource()` creates a standardized, RESTful route declaration for a specific entity (resource). 

Instead of writing individual routes for CRUD operations, a single `Route::resource('products', ProductController::class)` automatically registers 7 routes mapped to corresponding controller methods (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`).



### 5. Why Laravel is using "Facades", is it a design pattern?
Yes, **Facade** is a structural design pattern. In general software architecture, it provides a simplified interface to a complex set of classes or subsystems.

In Laravel, **Facades** provide a static interface to classes available in the application's service container. Laravel uses them because they provide a clean, readable, and memorable syntax (e.g., `Route::get()`, `Cache::get()`) while maintaining full testability via dependency injection under the hood.