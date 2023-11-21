











<script>
  // Gets the element that displays all orders.
  const allOrdersEl = document.getElementById("all-orders");
  // Gets the element that displays the selected order.
  const selectedDataEl = document.getElementById("selected-data");




  // Serves as a way to provide the the selected order data to all functions inside.
  // All code or fuctions that need access to selected order data need to be in here.
  const selectedDataManipulation = (event) => {

    // Stops displaying selected orders info on the right side of the page.
    const cancelDisplay = () => {
      selectedDataEl.innerHTML = "";
    }

    // Will save the edit and display warning message.
    // Will add comment to the order of who edited it.
    const saveEdit = () => {
      console.log('sa');
    }

    const displayDeleteBtn = (status) => {
      if (status != 'Inactive') {
        return `<button id='delete-button' class='mt-2 btn btn-danger'>Delete</button>`;
      }
      return '';
    }

    const displayStatusEditMode = (status) => {
      if (event.target.dataset.status == status) {
        return 'selected';
      }
      return '';
    }

    const displayActivityEditMode = (activity) => {
      if (event.target.dataset.activities == activity) {
        return 'selected';
      }
      return '';
    }

    const displayShirtEditMode = (size) => {
      if (event.target.dataset.tshirtSize == size) {
        return 'selected';
      }
      return '';
    }

    // Puts selected data into input elements so it can be edited.
    const editFullData = () => {
      selectedDataEl.innerHTML = `
      
        <span class='bold-data-column'>ID:</span> <span>${event.target.dataset.id} </span> <br>
        <input type="hidden" name="entry-id" value="${event.target.dataset.id}" />
        <span class='bold-data-column'>Date Created:</span> ${event.target.dataset.dateCreated} <br>
        <br>
        <span class='bold-data-column'>First Name:</span> <input value='${event.target.dataset.firstName}' name="first-name" required> <br>
        <span class='bold-data-column'>Last Name:</span> <input value='${event.target.dataset.lastName}' name="last-name" required> <br>
        <span class='bold-data-column'>Email:</span> <input value='${event.target.dataset.email}' name="email" required> <br>
        <span class='bold-data-column'>Phone:</span> <input value='${event.target.dataset.phone}' name="phone" required> <br>
        <br>
        <span class='bold-data-column'>Street Address:</span> <input value='${event.target.dataset.streetAddress}' name="street-address" required> <br>
        <span class='bold-data-column'>Address Line:</span> <input value='${event.target.dataset.addressLine}' name="suite"> <br>
        <span class='bold-data-column'>City:</span> <input value='${event.target.dataset.city}' name="city"> <br>
        <span class='bold-data-column'>State:</span> <input value='${event.target.dataset.state}' name="state"> <br>
        <span class='bold-data-column'>Zip Code:</span> <input value='${event.target.dataset.zipe}' name="zip"> <br>
        <span class='bold-data-column'>Country:</span> <input value='${event.target.dataset.country}' name="country" required> <br>
        <br>
        <span class='bold-data-column'>Is Deleted:</span> <input type='checkbox' name='is-deleted' ${event.target.dataset.isDeleted}> <br>
        <span class='bold-data-column'>Paper Work:</span> <input type='checkbox' name='paper-work' ${event.target.dataset.paperWork}> <br>
        <span class='bold-data-column'>Payment:</span> <input type='checkbox' name='payment' ${event.target.dataset.payment}> <br>
        <span class='bold-data-column'>Is Member:</span> <input type='checkbox' name='is-member' ${event.target.dataset.isMember}> <br>
        <span class='bold-data-column'>Status:</span> 
        <select name='status'>
          <option value='Stand By' ${displayStatusEditMode('Stand By')}>Stand By</option>
          <option value='Approved' ${displayStatusEditMode('Approved')}>Approved</option>
        </select> <br>
        <br>
        <span class='bold-data-column'>T-Shirt Size:</span>
        <select name="shirt-size" required>
            <option value="S" ${displayShirtEditMode("S")}>S</option>
            <option value="M" ${displayShirtEditMode("M")}>M</option>
            <option value="L" ${displayShirtEditMode("L")}>L</option>
            <option value="XL" ${displayShirtEditMode("XL")}>XL</option>
            <option value="XXL" ${displayShirtEditMode("XXL")}>XXL</option>
            <option value="XXXL" ${displayShirtEditMode("XXXL")}>XXXL</option>
        </select> <br>
        <span class='bold-data-column'>Selected Activities:</span>
        <select name="activity">
          <option value='Jump and Summit - $500' ${displayActivityEditMode('Jump and Summit - $500')}>Jump and Summit - $500</option>
          <option value='Jump Only - $350' ${displayActivityEditMode('Jump Only - $350')}>Jump Only - $350</option>
          <option value='Summit Only - $150' ${displayActivityEditMode('Summit Only - $150')}>Summit Only - $150</option>
        </select> <br>
        <br>
        <span class='bold-data-column'>ICE Name:</span> <input value='${event.target.dataset.iceName}' name="emergency-name" required> <br>
        <span class='bold-data-column'>ICE Email:</span> <input value='${event.target.dataset.iceEmail}' name="emergency-email" required> <br>
        <span class='bold-data-column'>ICE Phone:</span> <input value='${event.target.dataset.icePhone}' name="emergency-phone" required> <br>
        <span class='bold-data-column'>ICE Relationship:</span> <input value='${event.target.dataset.iceRelationship}' name="emergency-relationship" required> <br>
        <br>
        <span class='bold-data-column'>Last Updated By:</span> ${event.target.dataset.updatedBy} <br>
        <span class='bold-data-column'>Last Updated Date:</span> ${event.target.dataset.updatedDate} <br>
        <span class='bold-data-column'>Deleted By:</span> ${event.target.dataset.deletedBy} <br>
        <span class='bold-data-column'>Deleted Date:</span> ${event.target.dataset.deletedDate} <br>
        <br>
        <span class='bold-data-column'>Comments:</span> <textarea rows="5" class="non-resizable" name="comment">${event.target.dataset.specialRequest}</textarea><br>
        
        <div class="input-group">
                <input type="submit" value="Send Message" class="send-btn" name="submit">
        </div>
        <button id='cancel-edit-button' class='mt-2 btn btn-secondary'>Cancel</button>
      
        
      `;

      const saveButtonEl = document.getElementById("save-button");
      const cancelEditButtonEl = document.getElementById("cancel-edit-button");
      //const deactivateButtonEl = document.getElementById("delete-button");

      //saveButtonEl.addEventListener("click", saveOrder);
      cancelEditButtonEl.addEventListener("click", displaySelectedData);
      //deactivateButtonEl?.addEventListener("click", deleteOrder);
    }

    // displays selected data.
    const displaySelectedData = () => {
      if (event.target.classList.contains("more-info")) {
        console.log(event.target);
        selectedDataEl.innerHTML = `
          <span class='bold-data-column'>ID:</span> ${event.target.dataset.id} <br>
          <span class='bold-data-column'>Date Created:</span> ${event.target.dataset.dateCreated} <br>
          <br>
          <span class='bold-data-column'>First Name:</span> ${event.target.dataset.firstName} <br>
          <span class='bold-data-column'>Last Name:</span> ${event.target.dataset.lastName} <br>
          <span class='bold-data-column'>Email:</span> ${event.target.dataset.email} <br>
          <span class='bold-data-column'>Phone:</span> ${event.target.dataset.phone} <br>
          <br>
          <span class='bold-data-column'>Street Address:</span> ${event.target.dataset.streetAddress} <br>
          <span class='bold-data-column'>Address Line:</span> ${event.target.dataset.addressLine} <br>
          <span class='bold-data-column'>City:</span> ${event.target.dataset.city} <br>
          <span class='bold-data-column'>State:</span> ${event.target.dataset.state} <br>
          <span class='bold-data-column'>Zip Code:</span> ${event.target.dataset.zipe} <br>
          <span class='bold-data-column'>Country:</span> ${event.target.dataset.country} <br>
          <br>
          <span class='bold-data-column'>Is Deleted:</span> <input type='checkbox' name='myCheckbox' disabled ${event.target.dataset.isDeleted}> <br>
          <span class='bold-data-column'>Paper Work:</span> <input type='checkbox' name='myCheckbox' disabled ${event.target.dataset.paperWork}> <br>
          <span class='bold-data-column'>Payment:</span> <input type='checkbox' name='myCheckbox' disabled ${event.target.dataset.payment}> <br>
          <span class='bold-data-column'>Is Member:</span> <input type='checkbox' name='myCheckbox' disabled ${event.target.dataset.isMember}> <br>
          <span class='bold-data-column'>Status:</span> <span class='p-1 ${event.target.dataset.statusColor}'>${event.target.dataset.status}</span> <br>
          <br>
          <span class='bold-data-column'>T-Shirt Size:</span> ${event.target.dataset.tshirtSize} <br>
          <span class='bold-data-column'>Selected Activities:</span> ${event.target.dataset.activities} <br>
          <br>
          <span class='bold-data-column'>ICE Name:</span> ${event.target.dataset.iceName}  <br>
          <span class='bold-data-column'>ICE Email:</span> ${event.target.dataset.iceEmail} <br>
          <span class='bold-data-column'>ICE Phone:</span> ${event.target.dataset.icePhone} <br>
          <span class='bold-data-column'>ICE Relationship:</span> ${event.target.dataset.iceRelationship} <br>
          <br>
          <span class='bold-data-column'>Last Updated By:</span> ${event.target.dataset.updatedBy} <br>
          <span class='bold-data-column'>Last Updated Date:</span> ${event.target.dataset.updatedDate} <br>
          <span class='bold-data-column'>Deleted By:</span> ${event.target.dataset.deletedBy} <br>
          <span class='bold-data-column'>Deleted Date:</span> ${event.target.dataset.deletedDate} <br>
          <br>
          <span class='bold-data-column'>Comments:</span> ${event.target.dataset.specialRequest} <br>

          

          <button id='edit-button' class='mt-2 btn btn-primary'>Edit</button>
          <button id='cancel-display-btn' class='mt-2 btn btn-secondary'>Cancel</button>
          
        `;

        const editButtonEl = document.getElementById("edit-button");
        const cancelDisplayBtnEl = document.getElementById("cancel-display-btn");
        //const deactivateButtonEl = document.getElementById("delete-button");

        cancelDisplayBtnEl.addEventListener("click", cancelDisplay);
        editButtonEl.addEventListener("click", editFullData);
        //deactivateButtonEl?.addEventListener("click", deleteOrder);
      }
    }

    
    
    displaySelectedData();
  }

  // Defines all functions that need the selected data
  // Also displays selected data, starting the prosses of any data manipulation or retreaval of data to the admin.
  allOrdersEl.addEventListener("click", selectedDataManipulation);


</script>