var express = require('express');
var app = express();

var options = {
    root:___dirname // absolute path variable defined by express
};

app.get('/:filename', function (req, res) {
    res.sendFile(req.params.filename, options, function (err) {
	if (err) {
	    console.log(err);
	    res.status(404).send('File Not Found');
	}
	else {
	    console.log('Sent:', req.params.filename);
	}
    });
});

app.listen(7000, function () {
    console.log('Example express file server listening on port 7000');
});
