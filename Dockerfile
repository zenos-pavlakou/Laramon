FROM exozet/php-fpm:8.1

ENV NODE_VERSION 9.11.1

RUN ARCH= && dpkgArch="$(dpkg --print-architecture)" \
  && case "${dpkgArch##*-}" in \
    amd64) ARCH='x64';; \
    ppc64el) ARCH='ppc64le';; \
    s390x) ARCH='s390x';; \
    arm64) ARCH='arm64';; \
    armhf) ARCH='armv7l';; \
    i386) ARCH='x86';; \
    *) echo "unsupported architecture"; exit 1 ;; \
  esac \
  && curl -fsSLO --compressed "https://nodejs.org/dist/v$NODE_VERSION/node-v$NODE_VERSION-linux-$ARCH.tar.xz" \
  && tar -xJf "node-v$NODE_VERSION-linux-$ARCH.tar.xz" -C /usr/local --strip-components=1 --no-same-owner \
  && rm "node-v$NODE_VERSION-linux-$ARCH.tar.xz" \
  && ln -s /usr/local/bin/node /usr/local/bin/nodejs


RUN rm -rf /var/lib/apt/lists/* &&  apt-get update || apt-get update \
apt-get install -y gconf-service libasound2 libatk1.0-0 libc6 libcairo2 libcups2 libdbus-1-3  \
libexpat1 libfontconfig1 libgcc1 libgconf-2-4 libgdk-pixbuf2.0-0 libglib2.0-0  \
libgtk-3-0 libnspr4 libpango-1.0-0 libpangocairo-1.0-0 libstdc++6 libx11-6 libx11-xcb1 libxcb1  \
libxcomposite1 libxcursor1 libxdamage1 libxext6 libxfixes3 libxi6 libxrandr2 libxrender1  \
libxss1 libxtst6 ca-certificates fonts-liberation libappindicator1 libnss3  \
lsb-release xdg-utils wget

RUN mkdir /usr/src/app/personal_website

RUN apt-get update && apt-get install -y git

RUN git clone https://github.com/zenos-pavlakou/personal-website /usr/src/app/personal_website


COPY ./extra_files/git_setup.sh /usr/src/app/git_setup.sh
RUN chmod 777 /usr/src/app/git_setup.sh


COPY .env /usr/src/app/personal_website


COPY ./extra_files/php.ini /usr/local/etc/php/php.ini


WORKDIR /usr/src/app/personal_website

RUN composer update --ignore-platform-reqs
RUN composer install --ignore-platform-reqs
RUN composer require spatie/laravel-cookie-consent
RUN composer require spatie/laravel-server-side-rendering --ignore-platform-reqs
RUN apt install python2 -y
RUN apt install python3 -y
RUN apt install iputils-ping -y
RUN rm package-lock.json
RUN npm install -g npm@latest





SHELL ["/bin/bash", "--login", "-c"]

RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash
RUN nvm install 10.15.3






RUN nvm install 14
RUN nvm use 14
#RUN npm cache clear
#RUN npm install
#RUN git stash
#RUN git checkout develop
#RUN > ~/.git-credentials
#RUN apt-get update && apt-get install -y openssh-server
#RUN mkdir /var/run/sshd


EXPOSE 22
EXPOSE 80
