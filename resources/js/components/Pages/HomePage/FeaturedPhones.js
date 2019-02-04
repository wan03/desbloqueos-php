import React from 'react';

import Phone from '../../Phone/Phone'
import { Card, Button, CardImg, CardTitle, CardText, CardDeck,
    CardSubtitle, CardBody } from 'reactstrap';
    var phones = [
        {
            name: "iphone",
            price: 200,
            img: "https://www.sprint.com/content/dam/sprint/commerce/devices/apple/apple_iphone_6s_plus/gray/new/devicenb_650x900.png/jcr:content/renditions/cq5dam.thumbnail.290.370.png"
        },
        {
            name: "andriod",
            price: 200,
            img: "ldsf"
        },
        {
            name: "google",
            price: 200,
            img: "ldsf"
        },
        {
            name: "att",
            price: 200,
            img: "ldsf"
        },
        {
            name: "test",
            price: 200,
            img: "ldsf"
        }

    ]

   const FeaturedPhones = (props) => {
     return (
         <div className="phonesWrapper">
       <CardDeck>
            {
                phones.map(e => {
                    return <Phone  img={e.img} name={e.name} price={e.price}/>
                })
            }

       </CardDeck>
       </div>
     );
   };

   export default FeaturedPhones;
