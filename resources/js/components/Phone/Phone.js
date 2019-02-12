import React from 'react';
import { Link } from "react-router-dom";
import { Card, Button, CardImg, CardTitle, CardText, CardDeck,
    CardSubtitle, CardBody } from 'reactstrap';

function Phone(props){
    return(
        <Card>
        <CardImg  src={props.img} alt={props.name} />
        <CardBody>
          <CardTitle>{props.name}</CardTitle>
          <Link to={`/ProductInfoPage?id=${props.phoneId}`}>Go to product</Link>
        </CardBody>
      </Card>
    )
}



export default Phone;
