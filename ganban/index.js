const express = require("express");
const app = express();

app.get("/", (req, res) => {
  res.end("Hello, World");
});

const PORT = process.env.PORT || 3000;

app.listen(PORT, () => {
  console.log("Listening on port 3000");
})