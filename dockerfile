FROM nginx
RUN apt-get update && apt-get install -y vim
# ENV name local
# ENTRYPOINT echo "Hello, its $name env.."