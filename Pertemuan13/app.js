const express = require('express');
const crud = require('./crud');

const app = express();
const PORT = 3000;

app.use(express.json());
app.use(express.static('public'));

// GET
app.get('/mahasiswaGet', (req, res) => {
  crud.getAll((err, result) => {
    if (err) return res.status(500).send(err);
    res.json(result);
  });
});

// POST
app.post('/mahasiswaCreate', (req, res) => {
  crud.create(req.body, (err) => {
    if (err) return res.status(500).send(err);
    res.sendStatus(201);
  });
});

// PUT
app.put('/mahasiswaUpdate/:id', (req, res) => {
  crud.update(req.params.id, req.body, (err) => {
    if (err) return res.status(500).send(err);
    res.sendStatus(200);
  });
});

// DELETE
app.delete('/mahasiswaDelete/:id', (req, res) => {
  crud.remove(req.params.id, (err) => {
    if (err) return res.status(500).send(err);
    res.sendStatus(200);
  });
});

app.listen(PORT, () => {
  console.log(`🚀 Server jalan di http://localhost:${PORT}`);
});
