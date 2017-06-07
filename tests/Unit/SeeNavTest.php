<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeeNavTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSeeHome()
    {
        $this->get('/')->assertSee('<a href="#home">Home</a>');
    }

        public function testSeeAbout()
    {
        $this->get('/')->assertSee('<a href="#about-me">About</a>');
    }

        public function testSeeResume()
    {
        $this->get('/')->assertSee('<a href="#resume">Resume</a>');
    }
 
        public function testSeePortfolio()
    {
        $this->get('/')->assertSee('<a href="#portfolio">Portfolio</a>');
    }
 
        public function testSeeTestiomonials()
    {
        $this->get('/')->assertSee('<a href="#testimonials">Testimonials</a>');
    }

        public function testSeeContact()
    {
        $this->get('/')->assertSee('<a href="#contact">Contact</a>');
    }
}
