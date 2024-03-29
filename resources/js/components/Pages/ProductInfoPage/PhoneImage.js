import React from "react";

// Layout imports
import Image from 'react-bootstrap/Image'


function PhoneImage(props) {
    return (
        <div className="productInfo">
            <Image src={props.img} alt={props.name} fluid />
        </div>

    );
}


export default PhoneImage;
