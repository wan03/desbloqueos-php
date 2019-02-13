import React from "react";

import { Container, Row, Col } from 'reactstrap';
import HomeHeader from './HomeHeader';
import FeaturedPhones from './FeaturedPhones';
import HomeVideo from './HomeVideo';
import './HomePage.css';

import {
    Card, Button, CardImg, CardTitle, CardText, CardDeck,
    CardSubtitle, CardBody
} from 'reactstrap';

function HomePage(props) {
    return (
        <div className="HeaderWrapper" >
            <div className="carousel">
                <HomeHeader />
            </div>

            {/* <div > */}
                <Row className="featuredPhonesBar">
                    <FeaturedPhones />
                </Row>
            {/* </div> */}
            <div>
                <Row>
                    <Col md="6">
                    <div className="centeredContent">
                        <h2>No Sabes Como Desbloquear Tú Celular?</h2>
                        <p>Empieza este video. Todo lo que necesitas es el numero IMEI de tu telefono. Entonces en nuestra pagina Seleciona en que paiz comprastes el telefono. Seleciona la marca de telefono y el modelo. Entonces ordenalo y en un par de dias tienes un celular libre.</p>
                    </div>
                    </Col>
                    <Col md="6">
                    <div className="centeredContent">
                        <HomeVideo />
                        </div>
                    </Col>
                </Row>
            </div>

        </div>

    );
}

export default HomePage;
