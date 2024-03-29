import React from 'react';
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';
import ListItemText from '@material-ui/core/ListItemText';
import Checkbox from '@material-ui/core/Checkbox';


const styles = theme => ({
  root: {
    width: '100%',
    maxWidth: 360,
    backgroundColor: theme.palette.background.paper,
  },
});

class BrandScrollBar extends React.Component {
  state = {
    checked: [0],
  };

  handleToggle = value => () => {
    const { checked } = this.state;
    const currentIndex = checked.indexOf(value);
    const newChecked = [...checked];

    if (currentIndex === -1) {
      newChecked.push(value);
    } else {
      newChecked.splice(currentIndex, 1);
    }

    this.setState({
      checked: newChecked,
    });
  };

  render() {
    const { classes } = this.props;

    return (
      <List className={classes.root} style={{maxHeight: 200, overflow: 'auto'}}>
        {[0, 1, 2, 3].map(value => (
          <ListItem key={value} role={undefined} dense button onClick={this.handleToggle(value)}>
            <Checkbox
              checked={this.state.checked.indexOf(value) !== -1}
              tabIndex={-1}
              disableRipple
            />
            <ListItemText primary={`Line item ${value + 1}`} />
          </ListItem>
        ))}
      </List>
    );
  }
}

BrandScrollBar.propTypes = {
  classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(BrandScrollBar);

















// import React from "react";

// // import Checkbox from './Checkbox'

// function BrandScrollBar(props) {
//     return (
//         <div>
//                 <h4>BrandScrollBar</h4>
//                 {/* <Checkbox/> */}


//         </div>
//     );
// }


// export default BrandScrollBar;
