# 🩸 Blood Bank Web App

A Laravel-based Blood Bank Management System designed to streamline the process of blood donations and requests between hospitals, donors, and the blood bank.

## 🚀 Features

This system supports three types of users:

### 1. **Admin (Blood Bank)**
- Manage hospitals and donors.
- Monitor and update blood stock (including blood type and validation date).
- View and handle blood requests from hospitals.
- Initiate blood requests to donors when needed.

### 2. **Hospitals**
- Submit blood requests to the blood bank.
- Track request status.
- Manage hospital profile information.

### 3. **Donors**
- Receive blood donation requests from the blood bank.
- Manage personal information and blood type.

## 🔁 Blood Request Flow

1. A **hospital** requests a specific blood type.
2. The **admin** (blood bank) checks if the requested type is available in stock.
   - ✅ If available: The request is accepted and processed.
   - ❌ If not available: The admin requests **donors** with the matching blood type.
3. Donors can respond and donate, helping replenish the stock.

## 🧪 Blood Stock Management

- Each blood entry includes:
  - Blood Type (e.g., A+, O-)
  - Validation/Expiry Date
- Stock is updated automatically request fulfillment.

## 🛠️ Tech Stack

- **Framework:** Laravel 9
- **Frontend:** Bootstrap
- **Database:** MySQL

## 📂 Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/a-h-alhaddad/Blood-Bank
   cd blood-bank-app
