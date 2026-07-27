<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Usage Page</title>
  <link rel="stylesheet" href="bloodUsageStyle.css">
</head>
<body>
  <div class="container">
    <h1>Blood Usage Details</h1>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search by name..." oninput="filterTable()">
    </div>
    <table id="bloodUsageTable">
      <thead>
        <tr>
          <th>User Name</th>
          <th>Date</th>
          <th>Quantity (ml)</th>
          <th>Reason</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <!-- Initial data (first 3 rows) -->
        <tr>
          <td>John Doe</td>
          <td>2023-10-01</td>
          <td>500</td>
          <td>Surgery</td>
        </tr>
        <tr>
          <td>Jane Smith</td>
          <td>2023-10-02</td>
          <td>300</td>
          <td>Accident</td>
        </tr>
        <tr>
          <td>Alice Johnson</td>
          <td>2023-10-03</td>
          <td>200</td>
          <td>Anemia</td>
        </tr>
        <!-- Hidden rows (loaded on "See More") -->
        <tr class="hidden-row">
          <td>Bob Brown</td>
          <td>2023-10-04</td>
          <td>400</td>
          <td>Surgery</td>
        </tr>
        <tr class="hidden-row">
          <td>Charlie Davis</td>
          <td>2023-10-05</td>
          <td>350</td>
          <td>Accident</td>
        </tr>
        <tr class="hidden-row">
          <td>David Wilson</td>
          <td>2023-10-06</td>
          <td>450</td>
          <td>Anemia</td>
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
    const name = row.querySelector("td").textContent.toLowerCase();
    if (name.includes(filter)) {
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