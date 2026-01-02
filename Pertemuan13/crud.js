const db = require('./db');

// GET
exports.getAll = (callback) => {
  db.query("SELECT * FROM mahasiswa", callback);
};

// POST
exports.create = (data, callback) => {
  db.query(
    "INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES (?, ?, ?, ?)",
    [data.nama, data.nim, data.jurusan, data.email],
    callback
  );
};

// PUT
exports.update = (id, data, callback) => {
  db.query(
    "UPDATE mahasiswa SET nama=?, nim=?, jurusan=?, email=? WHERE id=?",
    [data.nama, data.nim, data.jurusan, data.email, id],
    callback
  );
};

// DELETE
exports.remove = (id, callback) => {
  db.query(
    "DELETE FROM mahasiswa WHERE id=?",
    id,
    callback
  );
};
