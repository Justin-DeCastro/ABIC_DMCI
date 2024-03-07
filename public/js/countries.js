// Fetch the countries.json file
fetch('countries.json')
  .then(response => {
    // Check if the response is successful
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    // Parse the JSON data
    return response.json();
  })
  .then(data => {
    // Process the JSON data
    console.log(data);
    // Here, you can manipulate or use the data as needed
  })
  .catch(error => {
    // Handle errors
    console.error('There was a problem with the fetch operation:', error);
  });
