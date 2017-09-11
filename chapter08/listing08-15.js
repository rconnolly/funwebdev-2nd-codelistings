var books = [
   { title: "Data Structures and Algorithm Analysis in C++",
     publisher: "Pearson",
     authors: [
      {firstName: "Mark", lastName: "Weiss" }]
   },
   { title: "Foundations of Finance",
     publisher: "Pearson",
     authors: [
      {firstName: "Arthur", lastName: "Keown" },
      {firstName: "John", lastName: "Martin" }]
   },
   { title: "Literature for Composition",
     publisher: "Longman",
     authors: [
      {firstName: "Sylvan", lastName: "Barnet" },
      {firstName: "William", lastName: "Cain" },
      {firstName: "William", lastName: "Burto" }]
     }
];

function outputBooks() {
   for (i=0; i<books.length;i++) {
      document.write("<h2>" + books[i].title + "</h2>");
      outputAuthors(books[i]);
   }
}

function outputAuthors(book) {
   for (i=0; i<book.authors.length;i++) {
      document.write(book.authors[i].lastName + "<br>");
   }
}

outputBooks();