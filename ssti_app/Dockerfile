FROM python:3.9

WORKDIR /apps/

COPY . /apps/

WORKDIR /apps/

RUN pip install -U pip setuptools && pip install -r require.txt

EXPOSE 5000

ENTRYPOINT ["python"]

CMD ["ssti.py"]