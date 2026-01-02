const mysql = require('mysql');

const db = mysql.createPool({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'akademik',
  connectionLimit: 10
});

db.getConnection((err, connection) => {
  if (err) {
    console.error('❌ Koneksi database gagal:', err);
  } else {
    console.log('✅ Database MySQL terhubung');
    connection.release();
  }
});

module.exports = db;
