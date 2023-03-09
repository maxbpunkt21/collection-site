import React from 'react';

import { Link } from 'react-router-dom';

const StrainCard = ({ strain: {id, name} }) => {
  const link = '/strains/' + id;  
  return (
    <Link to={link}>
      <div className="movie" key={name}>
        <div>
            <img src={require(`./img/0${id}.jpg`)} alt={name}/>
          {/* <span>{id}</span> */}
          <h3 className='strain_name'>{name}</h3>
        </div>
      </div>
    </Link>
  );
}

export default StrainCard;