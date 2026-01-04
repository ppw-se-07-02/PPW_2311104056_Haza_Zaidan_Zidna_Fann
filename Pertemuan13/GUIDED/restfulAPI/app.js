const express = require("express");
const path = require("path");          // ⬅️ TAMBAHKAN INI
const dbOperations = require("./crud");

const app = express();
const port = 3000;

app.use(express.json());
app.use(express.static(path.join(__dirname, "public")));

// Create
app.post("/mahasiswaCreate", (req, res) => {
  const { nama, nim, jurusan, email } = req.body;
  dbOperations.createMahasiswa(nama, nim, jurusan, email, (error) => {
    if (error) {
      return res.status(500).send("Error creating");
    }
    res.status(201).send("Mahasiswa created");
  });
});

// Read
app.get("/mahasiswaGet", (req, res) => {
  dbOperations.getAllMahasiswa((error, users) => {
    if (error) {
      return res.status(500).send("Error fetching users");
    }
    res.json(users);
  });
});

// Update
app.put("/mahasiswaUpdate/:id", (req, res) => {
  const { id } = req.params;
  const { nama, nim, jurusan, email } = req.body;

  dbOperations.updateMahasiswa(id, nama, nim, jurusan, email, (error) => {
    if (error) {
      return res.status(500).send("Error updating");
    }
    res.send("Mahasiswa updated");
  });
});

// Delete
app.delete("/mahasiswaDelete/:id", (req, res) => {
  const { id } = req.params;

  dbOperations.deleteMahasiswa(id, (error) => {
    if (error) {
      return res.status(500).send("Error deleting");
    }
    res.send("Mahasiswa deleted");
  });
});

// Run server
app.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
});
