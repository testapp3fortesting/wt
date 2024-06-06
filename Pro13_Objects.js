// create an object
var person = {
    Firstname : "Vasundhara",
    Lastname : "Laykar",
    Age : 20,
    Position : "Developer",
    FullName : function() {
        return this.Firstname + " " + this.Lastname;
    }
}

//Accessing elements

   console.log("Firstname : "+person.Firstname);
   console.log("Lastname : "+person.Lastname);
   console.log("Age : "+person.Age);
   console.log("Position : "+person.Position);
   console.log("FullName : "+person.FullName());

