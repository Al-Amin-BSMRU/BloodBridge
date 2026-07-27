<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Camp</title>
  <link rel="stylesheet" href="donationCamp.css">
</head>
<body>
  <div class="container">
    <h1>Donatio Camp Details</h1>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search by organizer name..." oninput="filterTable()">
    </div>
    <table id="bloodUsageTable">
      <thead>
        <tr>
          <th>Organizer Name</th>
          <th>Date</th>
          <th>Blood Collected (Unit)</th>
          <th>A+</th>
          <th>A-</th>
          <th>B+</th>
          <th>B-</th>
          <th>O+</th>
          <th>O-</th>
          <th>AB+</th>
          <th>AB-</th>
          <th>Location</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <!-- Initial data (first 3 rows) -->
        <tr>
          <td>Health Organization A</td>
          <td>2023-10-01</td>
          <td>50</td>
          <td>10</td>
          <td>5</td>
          <td>8</td>
          <td>4</td>
          <td>12</td>
          <td>3</td>
          <td>6</td>
          <td>2</td>
          <td>New York</td>
        </tr>
        <tr>
          <td>Community Blood Drive</td>
          <td>2023-10-02</td>
          <td>40</td>
          <td>8</td>
          <td>4</td>
          <td>7</td>
          <td>3</td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>1</td>
          <td>Los Angeles</td>
        </tr>
        <tr>
          <td>Red Cross</td>
          <td>2023-10-03</td>
          <td>60</td>
          <td>12</td>
          <td>6</td>
          <td>10</td>
          <td>5</td>
          <td>15</td>
          <td>4</td>
          <td>8</td>
          <td>3</td>
          <td>Chicago</td>
        </tr>
        <!-- Hidden rows (loaded on "See More") -->
        <tr class="hidden-row">
          <td>Local Health Clinic</td>
          <td>2023-10-04</td>
          <td>30</td>
          <td>6</td>
          <td>3</td>
          <td>5</td>
          <td>2</td>
          <td>8</td>
          <td>1</td>
          <td>4</td>
          <td>1</td>
          <td>Houston</td>
        </tr>
        <tr class="hidden-row">
          <td>City Blood Bank</td>
          <td>2023-10-05</td>
          <td>55</td>
          <td>11</td>
          <td>5</td>
          <td>9</td>
          <td>4</td>
          <td>14</td>
          <td>3</td>
          <td>7</td>
          <td>2</td>
          <td>Phoenix</td>
        </tr>
        <tr class="hidden-row">
          <td>National Health Services</td>
          <td>2023-10-06</td>
          <td>45</td>
          <td>9</td>
          <td>4</td>
          <td>8</td>
          <td>3</td>
          <td>11</td>
          <td>2</td>
          <td>6</td>
          <td>1</td>
          <td>Philadelphia</td>
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
        const organizerName = row.querySelector("td").textContent.toLowerCase();
        if (organizerName.includes(filter)) {
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