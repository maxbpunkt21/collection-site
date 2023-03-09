import React from "react";

import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import "bootstrap/dist/css/bootstrap.min.css"; 

import "./App.css";
import Home from "./components/Home";
import StrainDetail from "./components/StrainDetail";
import Startseite from "./components/Startseite";
import Register from "./components/Register";


const App = () => {
  return (
    <Router>
      <div className="app">
        <div className="container">
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/strains/:id" element={<StrainDetail />} />
            <Route path="/Startseite" element={<Startseite />} />
            <Route path="/register" element={<Register />} />
          </Routes>
        </div>
      </div>
    </Router>
  );
};

export default App;