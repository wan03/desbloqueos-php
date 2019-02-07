import React from 'react';
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import InputLabel from '@material-ui/core/InputLabel';
import FormHelperText from '@material-ui/core/FormHelperText';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';

const styles = theme => ({
  root: {
    display: 'flex',
    flexWrap: 'wrap',
  },
  formControl: {
    margin: theme.spacing.unit,
    minWidth: 120,
  },
  selectEmpty: {
    marginTop: theme.spacing.unit * 2,
  },
});

class SearchDropDown extends React.Component {
  state = {
    age: '',
    name: 'hai',
    labelWidth: 0,
  };



  handleChange = name => event => {
    this.setState({ [name]: event.target.value });
  };

  render() {
    const { classes } = this.props;

    return (
      <div className={classes.root}>


        <FormControl required className={classes.formControl}>
          <InputLabel htmlFor="age-native-required">Requerido</InputLabel>
          <Select
            native
            value={this.state.age}
            onChange={this.handleChange('age')}
            name="age"
            inputProps={{
              id: 'age-native-required',
            }}
          >
            <option value="" />
            <option value={10}>US</option>
            <option value={20}>Mexico</option>
            <option value={30}>Costa Rica</option>
          </Select>
          <FormHelperText>En que país comprastes el teléfono?</FormHelperText>
        </FormControl>


      </div>
    );
  }
}

SearchDropDown.propTypes = {
  classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(SearchDropDown);
