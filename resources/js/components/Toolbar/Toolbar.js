import React from 'react';

import DrawerToggleButton from '../SideDrawer/DrawerToggleButton';

import './Toolbar.css'



const Toolbar = props => (
    <header className="toolbar">
        <nav className="toolbar_nav">
            <div>
                <DrawerToggleButton />
            </div>
            <div className="toolbar_logo"><a href="/">DESBLOQUEA TU CELULAR</a></div>
            <div className="spacer" />
            <div className="toolbar_nav_items">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/celulares">CELULARES</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
            </div>
        </nav>
    </header>
);

export default Toolbar;
