# Gravy

Gravy is a cool Gravatar package for FuelPHP. It's based of the CodeIgniter helper and the Gravtastic gem for Ruby.
You can add gravatars to your project with just one line of code.

# Install

to install this package simply type this:

	php oil package install gravy

# Usage

There are two ways to retrieve a gravatar. 

By email:

	Gravy::from_email('');

By hash:

	Gravy::from_hash('');