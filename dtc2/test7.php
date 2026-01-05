jhbljhgluigblikhbikjbjk
jhgjhgjhvjhvkhbkjhbkjhbkjhoijoiuoiyiuture5463654576876987978576565544344

ENV SECRETSVOL $SECRETSVOL
ENV JAVA_OPTS $JAVA_OPTS
ENV JAVA_AGENT $JAVA_AGENT

EXPOSE 8041
ARG JAR_FILE=target/*.jar
COPY ${JAR_FILE} /work/app.jar

USER nobody
CMD java ${JAVA_AGENT} ${JAVA_OPTS} -jar /work
