import React from "react";

// Layout imports
import { Container, Row, Col } from 'reactstrap';
import PhoneImage from './PhoneImage';
import PhoneOrdering from './PhoneOrdering';

function PhonePlacement(props) {
    return (
        <div>

                    <Row>

                    <Col md="4">
                    <PhoneImage/>
                    </Col>
                    <Col md="8">

                    <PhoneOrdering />

                    </Col>

                    </Row>

        </div>

    );
}


export default PhonePlacement;
