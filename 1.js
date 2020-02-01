const biodata = (name, age) => {
  return {
    "name": name,
    "age": age,
    "address": "Jl. Mastrip no 51 Blitar",
    "hobbies": ["basket, movies"],
    "is_married": false,
    "list_school": [
      {
        "name": "ITS",
        "year_in": 2012,
        "year_out": 2016,
        "major": "Informatics Engineering"
      },
      {
        "name": "SMA N 1 PACITAN",
        "year_in": 2009,
        "year_out": 2012,
        "major": null
      }
    ],
    "skills": [
      { "javascript": "advanced" },
      { "html": "advanced" },
      { "css": "advanced" },
      { "java": "advanced" }
    ],
    "interest_in_coding": true
  }
}

console.log(biodata("Satriya Wicaksana", 25));

// tulis kegunaan JSON pada REST API
/*
JSON is a format for storing and transporting data.
JSON is often used when data is sent from a server to a web page.
 */