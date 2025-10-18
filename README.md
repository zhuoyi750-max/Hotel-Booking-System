# Hotel Booking Website

A full-stack web application that allows users to search, book, and review hotel rooms online.  
It provides both **guest-facing** and **administrator** features for a complete booking management experience.

---

## Overview

This project simulates a modern travel booking platform similar to [Trip.com](https://www.trip.com/).  
Users can search for available rooms by city and date, view details such as prices and ratings, and submit reviews after their stay.  
Administrators can manage reservations, update hotel listings, and moderate user feedback.

---

## Key Features

### User Functions
- **Room Search & Booking** – Search hotels by location, date, and number of guests.  
- **Dynamic Results Display** – View available rooms with images, prices, and review summaries.  
- **Review System** – Leave and read comments about hotel experiences.

### Admin Functions
- **Reservation Management** – Add, update, or cancel reservations and handle personal requests.  
- **Hotel Management** – Maintain hotel and room details.  
- **Review Moderation** – Remove inappropriate or irrelevant reviews.

---

## Project Structure

/hotel-booking-website/
│
├── index.php # Homepage
├── Hotel_Search.php # Hotel search form
├── Hotel_Results.php # Displays hotel search results
├── Navigation_Bar.php # Reusable navigation bar
├── Connection.php # Database connection file
├── Style.css # CSS stylesheet
└── /images/ # Static image assets


---

## Technologies Used

- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** Apache (tested with XAMPP)

---

## Getting Started
1. Set up a local PHP server (e.g., XAMPP, MAMP).

2. Place the project in your web root directory (e.g., htdocs for XAMPP).

3. Start Apache and MySQL, then open your browser and visit:

http://localhost/Demo/
