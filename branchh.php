<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Branch Page</title>
  <link rel="stylesheet" href="branchh.css">
</head>
<body>
  <div class="container">
    <h1>Blood Branch Details</h1>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search by branch name..." oninput="filterTable()">
    </div>
    <table id="branchInventoryTable">
      <thead>
        <tr>
          <th>Branch Name</th>
          <th>Address</th>
          <th>Contact Number</th>
          <th>Inventory</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <!-- Initial data (first 3 rows) -->
        <tr>
          <td>Downtown Branch</td>
          <td>123 Main St, Cityville</td>
          <td>+1 123-456-7890</td>
          <td>
            <button class="btn white-btn" id="inventoryBtn" onclick="showInventory()">
              <a href="inventory.php">Inventory</a>
            </button>
          </td>
        </tr>
        <tr>
          <td>Uptown Branch</td>
          <td>456 Elm St, Townsville</td>
          <td>+1 234-567-8901</td>
          <td>
            <button class="btn white-btn" id="inventoryBtn" onclick="showInventory()">
              <a href="inventory.php">Inventory</a>
            </button>
          </td>
        </tr>
        <tr>
          <td>Midtown Branch</td>
          <td>789 Oak St, Villagetown</td>
          <td>+1 345-678-9012</td>
          <td>
            <button class="btn white-btn" id="inventoryBtn" onclick="showInventory()">
              <a href="inventory.php">Inventory</a>
            </button>
          </td>
        </tr>
        <!-- Hidden rows (loaded on "See More") -->
        <tr class="hidden-row">
          <td>Westside Branch</td>
          <td>321 Pine St, Hamletville</td>
          <td>+1 456-789-0123</td>
          <td>
            <button class="btn white-btn" id="inventoryBtn" onclick="showInventory()">
              <a href="inventory.php">Inventory</a>
            </button>
          </td>
        </tr>
        <tr class="hidden-row">
          <td>Eastside Branch</td>
          <td>654 Maple St, Countryside</td>
          <td>+1 567-890-1234</td>
          <td>
            <button class="btn white-btn" id="inventoryBtn" onclick="showInventory()">
              <a href="inventory.php">Inventory</a>
            </button>
          </td>
        </tr>
        <tr class="hidden-row">
          <td>Northside Branch</td>
          <td>987 Birch St, Suburbia</td>
          <td>+1 678-901-2345</td>
          <td>
            <button class="btn white-btn" id="inventoryBtn" onclick="showInventory()">
              <a href="inventory.php">Inventory</a>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    <button id="seeMoreButton" onclick="showMoreRows()">See More</button>
  </div>
  <script>
    // Function to filter the table based on search input
    function filterTable() {
      const searchInput = document.getElementById("searchInput");
      const filter = searchInput.value.toLowerCase();
      const tableRows = document.querySelectorAll("#tableBody tr");

      tableRows.forEach((row) => {
        const branchName = row.querySelector("td").textContent.toLowerCase();
        if (branchName.includes(filter)) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
      });
    }

    // Function to show more rows when "See More" is clicked
    function showMoreRows() {
      const hiddenRows = document.querySelectorAll(".hidden-row");
      const seeMoreButton = document.getElementById("seeMoreButton");

      // Show the next 3 hidden rows
      for (let i = 0; i < 3; i++) {
        if (hiddenRows[i]) {
          hiddenRows[i].classList.remove("hidden-row");
        }
      }

      // Hide the "See More" button if no more rows are left
      if (document.querySelectorAll(".hidden-row").length === 0) {
        seeMoreButton.style.display = "none";
      }
    }
  </script>
</body>
</html>