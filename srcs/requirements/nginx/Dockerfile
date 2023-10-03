# Using Ubuntu as base image
FROM debian:buster

# Update software repositories
RUN apt-get update -q

# Install Nginx
RUN apt-get install -y -q nginx

# Install OpenSSL
RUN apt-get install -y -q openssl

RUN mkdir -p /etc/nginx/ssl

# Generate SSL certificate and key
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
        -out /etc/nginx/ssl/jrainpre.crt \
        -keyout /etc/nginx/ssl/jrainpre.key \
        -subj "/C=DE/ST=Vienna/L=Vienna/O=42Vienna/OU=jrainpre/CN=jrainpre/"


# Remove existing default symbolic link or file
RUN rm -f /etc/nginx/sites-enabled/default

# Copy the Nginx configuration file
COPY conf/default /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Expose port 443
EXPOSE 443

# Start Nginx when the container has provisioned.
CMD ["nginx", "-g", "daemon off;"]

# Clean up APT cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*



