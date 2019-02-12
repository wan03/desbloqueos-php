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
            <HomeHeader />
            <Container>
                <div >
                    <Row>

                            <FeaturedPhones />

                    </Row>
                </div>
                <div>

                    <Row>
                        <Col md="6">
                            <h2>Como Desbloquear Tu Celular</h2>
                            <p>Empieza este video. Todo lo que necesitas es el numero IMEI de tu telefono.</p>

                        </Col>
                        <Col md="6">Home Video<HomeVideo /></Col>
                    </Row>

                </div>
            </Container>
        </div>

    );
}

export default HomePage;
