import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router';

import Category1 from "./assets/Categorys/Category-1.svg";
import TitelTrim from "./assets/Categorys/ATT-Title.svg";
import Category2 from "./assets/Categorys/Category-2.svg";
import Main from "./assets/Categorys/MAIN.svg";
import Potency from "./assets/Categorys/Potency.svg";
import Type from "./assets/Categorys/Type.svg";
import Background from "./assets/Categorys/Background.svg";
import Body from "./assets/Categorys/Body.svg";
import LongPurpleTrim from "./assets/Categorys/Long_Purple-1.svg";
import DashedPurpleTrim from "./assets/Categorys/Dashed_Purple-1.svg";
import BlueBud from "./assets/Categorys/Bud-Blue.svg";


import Footer from "./Footer";









const API_URL = "https://papriko-db.herokuapp.com/cryptostrains/";

// const API_URL = "http://localhost:4000/cryptostrains";

const StrainDetail = () => {

    const { id } = useParams();
    const [strain, setStrain] = useState([]);  

    const searchStrains = async (ids) => {
        const response = await fetch(`${API_URL}/${ids}`);
        const data = await response.json();

        setStrain(data);
    }
    
    useEffect(() => {
        searchStrains(id);
    }, []);    

  return (
    <div class=""> 
        <div className='container align-items-center text-center'>
            <div className='row'>
                <div className='text-center'>
                    {/* <h4 class="g-letter-spacing-2 g-font-size-18 g-mb-10 str_number">#{id}</h4> */}
                    <h2 className='title'>'{strain.name}'</h2>
                    <img class="short_trim"src={DashedPurpleTrim} alt="Trim Line"/>
                </div>
            </div>
        </div>

        <div className='container-fluid align-items-center text-center'>
            <div className="row">
                <div className="col-12">
                    <img className='img-fluid strain-image' src={require(`./img/0${id}.jpg`)} alt="a"></img> 
                </div>
            </div>
        </div>

        <div className='container align-items-center text-center'>
            <div className='row text-center'>
                <img class="category_icon"src={Main} alt="Category Icon"/>
                {/* <img class="short_trim"src={DashedPurpleTrim} alt="Trim Line"/> */}
                <h2 className='categories_title'>ATTRIBUTES</h2>
                <img class="category_icon"src={LongPurpleTrim} alt="Trim Line"/>
            </div>
        </div>

        <div className='container align-items-center text-center'>
            <div className='row'>
                <div className="details">
                    <div className='col-2 category_box text-center'>
                        <img class="category_img"src={Category1} alt="Trim Line"/>
                        <h4 className='category_text'>Category</h4>
                        <img class="category_img"src={TitelTrim} alt="Trim Line"/>
                        <h5 className='attribute'>{strain.category}</h5>
                    </div>

                    <div className='col-2 category_box text-center'>
                        <img class="category_img"src={Category2} alt="Trim Line"/>
                        <h4 className='category_text'>Category 2</h4>
                        <img class="category_img"src={TitelTrim} alt="Trim Line"/>
                        <h5 className='attribute'>{strain.category2}</h5>
                    </div>

                    <div className='col-2 category_box text-center'>
                        <img class="category_img"src={Type} alt="Trim Line"/>
                        <h4 className='category_text'>Type</h4>
                        <img class="category_img"src={TitelTrim} alt="Trim Line"/>
                        <h5 className='attribute'>{strain.type}</h5>
                    </div>

                    <div className='col-2 category_box text-center'>
                        <img class="category_img"src={Potency} alt="Trim Line"/>
                        <h4 className='category_text'>Potency</h4>
                        <img class="category_img"src={TitelTrim} alt="Trim Line"/>
                        <h5 className='attribute'>{strain.thc}</h5>
                    </div>

                    <div className='col-2 category_box text-center'>
                        <img class="category_img"src={Body} alt="Trim Line"/>
                        <h4 className='category_text'>Body</h4>
                        <img class="category_img"src={TitelTrim} alt="Trim Line"/>
                        <h5 className='attribute'>{strain.body}</h5>
                    </div>

                    <div className='col-2 category_box text-center'>
                        <img class="category_img"src={Background} alt="Trim Line"/>
                        <h4 className='category_text'>Background</h4>
                        <img class="category_img"src={TitelTrim} alt="Trim Line"/>
                        <h5 className='attribute'>{strain.background}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div className='container'>
            <div className='row'>
                <div className='text-center'>
                    <img class="blue_bud"src={BlueBud} alt="Trim Line"/><br></br>
                    <img class="short_trim"src={DashedPurpleTrim} alt="Trim Line"/>
                </div>
            </div>
        </div>

        { <Footer /> }

    </div>

  )
}

export default StrainDetail