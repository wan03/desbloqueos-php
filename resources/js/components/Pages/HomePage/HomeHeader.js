import React from "react";


import { UncontrolledCarousel } from 'reactstrap';

const items = [
  {
    src: 'https://deershire.com/wp-content/uploads/2019/slide-01.jpg',
    altText: 'Una muchacha de pelo rizo castaño bregando con sú celular arriba de un edificio. El Titulo dice: Para que esperar? Desbloquea tu celular ahora.',

  },
  {
    src: 'https://deershire.com/wp-content/uploads/2019/slide-02.jpg',
    altText: 'Un muchaho sonriendo debloqueando sú celular. El Titulo dice: Rapido Y Seguro, Liberate de servicios no queridos.',

  },
  {
    src: 'https://deershire.com/wp-content/uploads/2019/slide-03.jpg',
    altText: 'Teléfonos antiguos de rueda en diferentes colores. El Titulo dice: Adios celular antiguo, Desbloquealo y vendelo.',

  }
];

const HomeHeader = () => <UncontrolledCarousel items={items} />;

export default HomeHeader;


