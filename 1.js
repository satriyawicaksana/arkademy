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
