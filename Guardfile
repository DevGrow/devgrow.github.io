# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'sprockets', :destination => 'assets', :asset_paths => ['assets/_javascripts', 'assets/_stylesheets'], :minify => false do
  watch (%r{^assets\/_javascripts\/((?!svn).)*\.*}){ |m| "assets/application.js" }
  watch (%r{^assets\/_stylesheets\/((?!svn).)*\.*}){ |m| "assets/application.css" }
end
