import React, { useRef } from "react";
import emailjs, { init } from "@emailjs/browser";

import Logo from "./assets/Logo/CS-Logo.svg";


function Register() {
  init("D_E7zMQqUaf0Rct-9");
  const form = useRef();

  const handleSubmit = (e) => {
    e.preventDefault();
    emailjs.sendForm("service_4i01ino", "template_gy8wogb", form.current, "D_E7zMQqUaf0Rct-9").then(
      (result) => {
        alert("Message Sent Successfully");
        console.log(result.text);
      },
      (error) => {
        console.log(error.text);
      }
    );
  };
  return (
    <div className="container">

      <form onSubmit={handleSubmit} ref={form}>
        <img className="mb-4"src={Logo} alt="Papriko Logo"/>
        <h1 className="text-center mb-4">Spannabis 2023 Raffle</h1>
        <div className="form-row">
          <div className="form-group col-12">
            <label htmlFor="First Name">First Name</label>
            <input type="text" className="form-control" name="firstname" />
          </div>
          <div className="form-group col-12">
            <label htmlFor="Last Name">Last Name</label>
            <input type="text" className="form-control" name="lastname" />
          </div>
          <div className="form-group col-12">
            <label htmlFor="inputAddress">E-Mail Address</label>
            <input 
            className="form-control" 
            type="email" 
            name="email" 
            required 
            />
          </div>
        </div>

        <button type="submit" className="btn btn-primary mt-3">
          Register
        </button>
      </form>
    </div>
  );
}

export default Register;