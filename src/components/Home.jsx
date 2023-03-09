import React, { useState, useEffect } from "react";

import StrainCard from './StrainCard';
import SearchIcon from "./search.svg";

import TrimLineGreenLong from "./Trim_Line_Green_Long.svg";
import NftIcon from "./assets/Icons/PAPRIKO-CryptoStrains_WA_CP_Icon_NFT.svg";
import TrimLine from "./assets/Trim-Lines/PAPRIKO-CryptoStrains_WA_CP_Trim-Line_Green-1.svg";
import NoStrains from "./assets/NoStrains/nostrains.svg";
import Navbar from "./Navbar";






const API_URL = "http://localhost:4000/cryptostrains";
// const API_URL = "https://papriko-db.herokuapp.com/cryptostrains/";


const Home = () => {
  const [searchTerm, setSearchTerm] = useState("");
  const [strains, setStrains] = useState([]);
  const [category, setCategory] = useState(); 
  const [category2, setCategory2] = useState(); 
  const [type, setType] = useState(); 
  const [thc, setThc] = useState(); 




  const [body, setBody] = useState(); 
  const [background, setBackground] = useState(); 



  useEffect(() => {
    searchStrains("");
  }, []);

  const searchStrains = async (title) => {
    const response = await fetch(`${API_URL}?q=${title}`);
    const data = await response.json();

    setStrains(data);
  };

  const searchStrainsByCategory = async (title) => {
    const response = await fetch(`${API_URL}?category=${title}`);
    const data = await response.json();

    setStrains(data); 
  };

  const searchStrainsByCategory2 = async (title) => {
    const response = await fetch(`${API_URL}?category2=${title}`);
    const data = await response.json();

    setStrains(data); 
  };

  const searchStrainsByBody = async (title) => {
    const response = await fetch(`${API_URL}?body_like=${title}`);
    const data = await response.json();

    setStrains(data); 
  };

  const searchStrainsByBackground = async (title) => {
    const response = await fetch(`${API_URL}?background_like=${title}`);
    const data = await response.json();

    setStrains(data); 
  };

  const searchStrainsByType = async (title) => {
    const response = await fetch(`${API_URL}?type=${title}`);
    const data = await response.json();

    setStrains(data); 
  };

  const searchStrainsByThc = async (title) => {
    const response = await fetch(`${API_URL}?thc=${title}`);
    const data = await response.json();

    setStrains(data); 
  };
  return (

    <div className="app">
      { <Navbar /> }
      <div className="container d-flex align-items-center justify-content-center text-center">
        <div className="row">
          <div className="col-lg-12">
            <img class="nft_icon"src={NftIcon} alt="NFT Icon Logo"/>
          </div>
          <div className="col-12">
            <img class="trim_line_green_long"src={TrimLine} alt="Trim Line"/>
          </div>
        </div>

        <div className="row">
          <div className="col-12">
            <h1 class="nft_collection">NFT - COLLECTION</h1>
          </div>
          <div className="col-12">
            <img class="trim_line_green_long"src={TrimLineGreenLong} alt="Papriko Logo"/>
          </div>
        </div>

        <div className="search">
          <input
            class="search-field"
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
            placeholder="SEARCH STRAINS"
          />
          <img
            src={SearchIcon}
            alt="search"
            onClick={() => searchStrains(searchTerm)}
          />
        </div>
        <div className="dropdowns centered">
          {/* <DropdownT /> */}
          <select 
          class="option color-c1 "
          value={category} 
          onChange={e=> { setCategory(e.target.value); searchStrainsByCategory(e.target.value); }}>
            <option disabled selected value="">CATEGORY</option>
            <option class="options">Cheese</option>
            <option class="options">Chocolate</option>
            <option class="options">Cookies</option>
            <option class="options">Diesel</option>
            <option class="options">Gelato</option>
            <option class="options">Glue</option>
            <option class="options">Gold</option>
            <option class="options">Haze</option>
            <option class="options">Kush</option>
            <option class="options">OG</option>
            <option class="options">Purple</option>
            <option class="options">Skunk</option>
            <option class="options">Zkittlez</option>
          </select>

          <select 
          class="option color-c2 margin-top-dropdown"
          value={category2} 
          onChange={e=> { setCategory2(e.target.value); searchStrainsByCategory2(e.target.value); }}>
            <option disabled selected value="">CATEGORY - 2</option>
            <option class="options">Aliens</option>
            <option class="options">Animals</option>
            <option class="options">Cheese</option>
            <option class="options">Fantasy</option>
            <option class="options">Food</option>
            <option class="options">Fruits</option>
            <option class="options">Gemstones</option>
            <option class="options">Gold</option>
            <option class="options">Ice Cream</option>
            <option class="options">Legendary</option>
            <option class="options">Neon</option>
            <option class="options">Plants</option>
            <option class="options">Rainbows</option>
            <option class="options">Space</option>
            <option class="options">Spooky</option>
            <option class="options">Sweets</option>
            <option class="options">Trippy</option>
            <option class="options">OTHER</option>
          </select>

          <select 
          class="option color-c3"
          value={body} 
          onChange={e=> { setBody(e.target.value); searchStrainsByBody(e.target.value); }}>
            <option disabled selected value="">BODY</option>
            <option class="options">Multi-Color</option>        
            <option class="options">Gold</option>
            <option class="options">Silver</option>
            <option class="options">Black</option>
            <option class="options">Grey</option>
            <option class="options">White</option>
            <option class="options">Blue</option>
            <option class="options">Green</option>
            <option class="options">Yellow</option>
            <option class="options">Orange</option>
            <option class="options">Red</option>
            <option class="options">Purple</option>
            <option class="options">Pink</option>
            <option class="options">Brown</option>
          </select>


          <select 
          class="option color-c4"
          value={background} 
          onChange={e=> { setBackground(e.target.value); searchStrainsByBackground(e.target.value); }}>
            <option disabled selected value="">BACKGROUND</option>
            <option class="options">Multi-Color</option>        
            <option class="options">Silver</option>
            <option class="options">Black</option>
            <option class="options">White</option>
            <option class="options">Blue</option>
            <option class="options">Green</option>
            <option class="options">Yellow</option>
            <option class="options">Orange</option>
            <option class="options">Red</option>
            <option class="options">Purple</option>
            <option class="options">Pink</option>
            <option class="options">Brown</option>
          </select>

          <select 
          class="option color-c5"
          value={type} 
          onChange={e=> { setType(e.target.value); searchStrainsByType(e.target.value); }}>
            <option disabled selected value="">TYPE</option>
            <option class="options">Mostly Sativa</option>        
            <option class="options">Mostly Indica</option>
            <option class="options">Hybrid</option>
          </select>

          <select 
          class="option color-c5"
          value={type} 
          onChange={e=> { setThc(e.target.value); searchStrainsByThc(e.target.value); }}>
            <option disabled selected value="">THC</option>
            <option class="options">Low</option>     
            <option class="options">Medium</option>
            <option class="options">High</option>
            <option class="options">Very High</option>
            <option class="options">Super High</option>
          </select>
        </div>
      </div>

      {strains?.length > 0 ? (
        <div className="container">
          {strains.map((strain) => (
            <StrainCard strain={strain} />
          ))}
        </div>
      ) : (
        <div className="empty">
        <img class="nostrains"src={NoStrains} alt="No Strains Found"/>
        </div>
      )}
    </div>  )

}

export default Home