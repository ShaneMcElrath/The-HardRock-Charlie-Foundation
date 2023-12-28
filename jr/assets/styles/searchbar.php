<style>
.filter-bar {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: white;
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.checkbox-group {
    display: flex;
    align-items: center;
}

.checkbox-group input[type="checkbox"] {
    margin-right: 5px;
}

.checkbox-group label {
    margin-right: 15px;
    cursor: pointer;
}

#search-bar {
    width: 700px;
    padding: 10px;
    border: 2px solid #007bff;
    border-radius: 10px;
    outline: none;
    background-color: #f0f0f0;
}

.dropdown {
    padding: 10px;
    border: 2px solid #007bff;
    border-radius: 5px;
    background-color: #fff;
    outline: none;
}

#search-button:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Hover effects */
.dropdown:hover, #search-bar:hover {
    border-color: #0056b3;
}

label {
  margin-bottom: 0;
}
</style>