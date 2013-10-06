server "162.243.20.46", :web, :app, :db, primary: true

set :application, "devgrow"
set :user, "mdolon"
set :deploy_to, "/home/#{user}/apps/#{application}"
set :deploy_via, :remote_cache
set :use_sudo, false

set :scm, "git"
set :repository, "git@github.com:mdolon/devgrow.git"
set :branch, "master"

default_run_options[:pty] = true
ssh_options[:forward_agent] = true

set :bundle_dir, ''
set :bundle_flags, '--system --quiet'

before "deploy", "deploy:check_revision"
after "deploy", "deploy:update_jekyll"

namespace :deploy do

  task :setup_config, roles: :web do
    sudo "ln -nfs #{current_path}/config/nginx.conf /etc/nginx/sites-enabled/#{application}"
    sudo "/etc/init.d/nginx reload"
    sudo "service php5-fpm restart"
    run "mkdir -p #{shared_path}/config"
  end

  desc "Run jekyll to update site before uploading"
  task :update_jekyll do
    run "cd #{latest_release}; rm -rf _site/*; jekyll;"
  end

  desc "Make sure local git is in sync with remote."
  task :check_revision, roles: :web do
    unless `git rev-parse HEAD` == `git rev-parse origin/master`
      puts "WARNING: HEAD is not the same as origin/master"
      puts "Run `git push` to sync changes."
      exit
    end
  end

end