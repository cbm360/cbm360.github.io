import React, { Component } from 'react'
import './header.scss'
import logo from './logo.svg'

class Header extends Component {
  render() {
    return (
      <header className="header">
        <img src={logo} className="header-logo" alt="logo" />
        <h1 className="header-title">Camron Moore</h1>
        <h2 className="header-certifications">CSP-SM, CSP-PO</h2>
      </header>
    )
  }
}

export default Header
