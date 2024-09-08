<!DOCTYPE html>
   <html>
     <head>
       <meta charset="utf-8" />
       <!-- This is the minified production version of parse js -->
       <script
         type="text/javascript"
         src="https://npmcdn.com/parse/dist/parse.min.js"
       ></script>
    </head>
    <body>
      <h1>JS SDK</h1>
      <input id="username" type="text" placeholder="Username" />
      <input id="email" type="email" placeholder="Email" />
      <input id="password" type="password" placeholder="Password" />
      <button id="createButton">Create User</button>
    </body>
    <script>
      // Initialize Parse
      Parse.serverURL = 'https://parseapi.back4app.com'; // This is your Server URL
// Remember to inform BOTH the Back4App Application ID AND the JavaScript KEY
      Parse.initialize(
        'qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic', // This is your Application ID
        'NDunEJ6qyg1AZ104lDqbC4969ItHhjXYoYXIwC1D' // This is your Javascript key
      );
  
      // Create a new User
      async function createParseUser() {
        // Creates a new Parse "User" object, which is created by default in your Parse app
        let user = new Parse.User();
        // Set the input values to the new "User" object
        user.set("username", document.getElementById("username").value);
        user.set("email", document.getElementById("email").value);
        user.set("password", document.getElementById("password").value);
        try {
          // Call the save method, which returns the saved object if successful
          user = await user.save();
          if (user !== null) {
            // Notify the success by getting the attributes from the "User" object, by using the get method (the id attribute needs to be accessed directly, though)
            alert(
              `New object created with success! ObjectId: ${
                user.id
              }, ${user.get("username")}`
            );
          }
        } catch (error) {
                    alert(`Error: ${error.message}`);
        }
      }
  
      // Add on click listener to call the create parse user function
      document.getElementById("createButton").addEventListener("click", async function () {
        createParseUser();
      });
    </script>
  </html>