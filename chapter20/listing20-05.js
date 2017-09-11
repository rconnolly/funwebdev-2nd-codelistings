var express = require('express');
var parser = require('body-parser');
var fs = require('fs');
var app = express();

var mongoose = require('mongoose');

// Connect to funwebdev database asynchronously. Subsequent database
// operations will be queued and then executed when the connection
// is complete
mongoose.connect('mongodb://localhost:27017/funwebdev',
   function (err, res) {
     if (err) {
	 console.log ('ERROR connecting to funwebdev: ' + err);
     } else {
         console.log ('Succeeded connected to funwebdev');
     }
   });

// define a schema that maps to the structure of the data in MongoDB
var bookSchema = new mongoose.Schema({
  id: Number,
  isbn10: String,
  isbn13: String,
  title: String,
  year: Number,
  publisher: String,
  production: {
      status: String,
      binding: String,
      size: String,
      pages: Number,
      instock: Date
  },
  category: {
    main: String,
    secondary: String
  }
});
// now create model using this schema to map to books collection in // database
var Book = mongoose.model('books',bookSchema);

//  handle GET requests for [domain]/api/books
app.route('/api/books')
    .get(function (req,resp) {
        Book.find({}, function(err, data) {
	    if (err) {
		resp.json({ message: 'Unable to connect to books' });
            } else {
                resp.json(data);
	    }
	});
    });

// handle requests for specific book: e.g., [domain]/api/book/0321886518
app.route('/api/books/:isbn')
    .get(function (req,resp) {
        Book.find({isbn10: req.params.isbn}, function(err, data) {
            if (err) {
                resp.json({ message: 'Book not found' });
            } else {
                resp.json(data);
            }
	});
    });

app.listen(7000, function () {
    console.log('Books web service listening on port 7000');
});
