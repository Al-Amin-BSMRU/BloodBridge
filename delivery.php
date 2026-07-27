<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Delivery History</title>
  <link rel="stylesheet" href="delivery.css">
</head>
<body>
  <div class="container">
    <h1>Blood Delivery History</h1>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search by delivery name..." oninput="filterTable()">
    </div>
    <table id="bloodUsageTable">
      <thead>
        <tr>
          <th>Delivery Name</th>
          <th>Date</th>
          <th>Blood Group</th>
          <th>Quantity (Bags)</th>
          <th>Location</th>
          <th>Patient Name</th>
          <th>Delivery Status</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <!-- Initial data (first 3 rows) -->
        <tr>
          <td>John Doe</td>
          <td>2023-10-01</td>
          <td>A+</td>
          <td>2</td>
          <td>New York</td>
          <td>Alice Johnson</td>
          <td>Successful</td>
        </tr>
        <tr>
          <td>Jane Smith</td>
          <td>2023-10-02</td>
          <td>B-</td>
          <td>1</td>
          <td>Los Angeles</td>
          <td>Bob Brown</td>
          <td>Unsuccessful</td>
        </tr>
        <tr>
          <td>Charlie Davis</td>
          <td>2023-10-03</td>
          <td>O+</td>
          <td>3</td>
          <td>Chicago</td>
          <td>David Wilson</td>
          <td>Successful</td>
        </tr>
        <!-- Hidden rows (loaded on "See More") -->
        <tr class="hidden-row">
          <td>Eva Green</td>
          <td>2023-10-04</td>
          <td>AB+</td>
          <td>2</td>
          <td>Houston</td>
          <td>Frank White</td>
          <td>Successful</td>
        </tr>
        <tr class="hidden-row">
          <td>George Black</td>
          <td>2023-10-05</td>
          <td>A-</td>
          <td>1</td>
          <td>Phoenix</td>
          <td>Grace Lee</td>
          <td>Unsuccessful</td>
        </tr>
        <tr class="hidden-row">
          <td>Henry Brown</td>
          <td>2023-10-06</td>
          <td>O-</td>
          <td>4</td>
          <td>Philadelphia</td>
          <td>Ivy Taylor</td>
          <td>Successful</td>
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
        const deliveryName = row.querySelector("td").textContent.toLowerCase();
        if (deliveryName.includes(filter)) {
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