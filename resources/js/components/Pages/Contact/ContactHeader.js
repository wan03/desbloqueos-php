import React from 'react';
import { Jumbotron, Container } from 'reactstrap';

import './../main.css';
const ProductInfoHeader = (props) => {
  return (
    <div>
      <Jumbotron fluid style={{ backgroundColor: '', color: ''}}>
        <Container fluid>
          <h3 className="display-3">Tienes Preguntas?</h3>
          <p className="lead">Contactanos hoy sobre cualquier pregunta que tengas. </p>
        </Container>
      </Jumbotron>
    </div>
  );
};

export default ProductInfoHeader;
